<?php

use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Models\BaseQueryBuilder;
use Botble\Blog\Models\Category;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Theme\Facades\Theme;
use Botble\Theme\Supports\ThemeSupport;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Arr;

app('events')->listen(RouteMatched::class, function () {
    ThemeSupport::registerGoogleMapsShortcode();
    ThemeSupport::registerYoutubeShortcode();

    if (is_plugin_active('blog')) {
        Shortcode::setPreviewImage('blog-posts', Theme::asset()->url('images/ui-blocks/blog-posts.png'));

        Shortcode::register(
            'featured-posts',
            __('Featured posts'),
            __('Featured posts'),
            function (ShortcodeCompiler $shortcode) {
                $posts = get_featured_posts((int) $shortcode->limit ?: 5, [
                    'author',
                ]);

                if ($posts->isEmpty()) {
                    return null;
                }

                return Theme::partial('shortcodes.featured-posts', compact('posts', 'shortcode'));
            }
        );

        Shortcode::setAdminConfig('featured-posts', function (array $attributes) {
            return ShortcodeForm::createFromArray($attributes)
                ->withLazyLoading()
                ->add(
                    'limit',
                    NumberField::class,
                    TextFieldOption::make()->label(__('Limit'))->defaultValue(5)->toArray()
                )
                ->add('background_color', ColorField::class, [
                    'label' => __('Background color'),
                    'default_value' => '#ecf0f1',
                ]);
        });

        Shortcode::setPreviewImage('featured-posts', Theme::asset()->url('images/ui-blocks/featured-posts.png'));

        Shortcode::register(
            'recent-posts',
            __('Recent posts'),
            __('Recent posts'),
            function (ShortcodeCompiler $shortcode) {
                $posts = get_latest_posts(7, [], ['slugable']);

                if ($posts->isEmpty()) {
                    return null;
                }

                $withSidebar = ($shortcode->with_sidebar ?: 'yes') === 'yes';

                return Theme::partial('shortcodes.recent-posts', [
                    'title' => $shortcode->title,
                    'withSidebar' => $withSidebar,
                    'posts' => $posts,
                    'shortcode' => $shortcode,
                ]);
            }
        );

        Shortcode::setPreviewImage('recent-posts', Theme::asset()->url('images/ui-blocks/recent-posts.png'));

        Shortcode::setAdminConfig('recent-posts', function (array $attributes) {
            return ShortcodeForm::createFromArray($attributes)
                ->withLazyLoading()
                ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
                ->add('background_color', ColorField::class, [
                    'label' => __('Background color'),
                    'default_value' => '#fff',
                ])
                ->add(
                    'with_sidebar',
                    SelectField::class,
                    SelectFieldOption::make()
                        ->label(__('With top sidebar?'))
                        ->choices(['yes' => __('Yes'), 'no' => __('No')])
                        ->toArray()
                );
        });

        Shortcode::register(
            'featured-categories-posts',
            __('Featured categories posts'),
            __('Featured categories posts'),
            function (ShortcodeCompiler $shortcode) {
                $with = [
                    'slugable',
                    'posts' => function (BelongsToMany|BaseQueryBuilder $query) {
                        $query
                            ->wherePublished()
                            ->orderByDesc('created_at');
                    },
                    'posts.slugable',
                ];

                if (is_plugin_active('language-advanced')) {
                    $with[] = 'posts.translations';
                }

                $posts = collect();

                $categoryIds = Shortcode::fields()->getIds('category_id', $shortcode);

                if ($categoryIds) {
                    $categories = Category::query()
                        ->with($with)
                        ->wherePublished()
                        ->whereIn('id', $categoryIds)
                        ->select([
                            'id',
                            'name',
                            'description',
                            'icon',
                        ])
                        ->get();
                } else {
                    $categories = get_featured_categories(2, $with);
                }

                foreach ($categories as $category) {
                    $posts = $posts->merge($category->posts->take(3));
                }

                $posts = $posts->sortByDesc('created_at');

                if ($posts->isEmpty()) {
                    return null;
                }

                $withSidebar = ($shortcode->with_sidebar ?: 'yes') === 'yes';

                return Theme::partial(
                    'shortcodes.featured-categories-posts',
                    [
                        'title' => $shortcode->title,
                        'withSidebar' => $withSidebar,
                        'posts' => $posts,
                        'shortcode' => $shortcode,
                    ]
                );
            }
        );

        Shortcode::setPreviewImage(
            'featured-categories-posts',
            Theme::asset()->url('images/ui-blocks/featured-categories-posts.png')
        );

        Shortcode::setAdminConfig('featured-categories-posts', function (array $attributes) {
            $categories = Category::query()->wherePublished()->pluck('name', 'id')->all();
            $categoryIds = Arr::get($attributes, 'category_id');

            if (! is_array($categoryIds)) {
                $categoryIds = $categoryIds ? explode(',', $categoryIds) : null;
            }

            return ShortcodeForm::createFromArray($attributes)
                ->withLazyLoading()
                ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
                ->add(
                    'category_id',
                    SelectField::class,
                    SelectFieldOption::make()
                        ->label(__('Choose categories'))
                        ->choices($categories)
                        ->selected($categoryIds)
                        ->searchable()
                        ->multiple()
                        ->toArray(),
                )
                ->add(
                    'with_sidebar',
                    SelectField::class,
                    SelectFieldOption::make()
                        ->label(__('With primary sidebar?'))
                        ->choices(['yes' => __('Yes'), 'no' => __('No')])
                        ->toArray()
                )
                ->add('background_color', ColorField::class, [
                    'label' => __('Background color'),
                    'default_value' => '#ecf0f1',
                ]);
        });
    }

    if (is_plugin_active('contact')) {
        Shortcode::setPreviewImage('contact-form', Theme::asset()->url('images/ui-blocks/contact-form.png'));
    }

    if (is_plugin_active('gallery')) {
        Shortcode::setPreviewImage('gallery', Theme::asset()->url('images/ui-blocks/gallery.png'));

        Shortcode::register(
            'all-galleries',
            __('All galleries'),
            __('All galleries'),
            function (ShortcodeCompiler $shortcode) {
                if (! function_exists('render_galleries')) {
                    return null;
                }

                $galleries = render_galleries((int) $shortcode->limit ?: 8);

                if (! $galleries) {
                    return null;
                }

                return Theme::partial('shortcodes.all-galleries', compact('galleries', 'shortcode'));
            }
        );

        Shortcode::setPreviewImage('all-galleries', Theme::asset()->url('images/ui-blocks/all-galleries.png'));

        Shortcode::setAdminConfig('all-galleries', function (array $attributes) {
            return ShortcodeForm::createFromArray($attributes)
                ->withLazyLoading()
                ->add(
                    'limit',
                    NumberField::class,
                    TextFieldOption::make()->label(__('Limit'))->defaultValue(8)->toArray()
                )
                ->add('background_color', ColorField::class, [
                    'label' => __('Background color'),
                    'default_value' => '#fff',
                ]);
        });
    }

    add_shortcode('home', __('Home'), __('Home'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.home', compact('shortcode'));
    });
    shortcode()->setAdminConfig('home', function (array $attributes) {
        return Theme::partial('shortcodes.home-admin-config', compact('attributes'));
    });

    add_shortcode('hero', __('Hero'), __('Hero'), function (ShortcodeCompiler $shortcode) {

        Theme::asset()
            ->container('footer')
            ->add(
                'particles',
                '/themes/beyond/js/particles.js',
            );

        Theme::asset()
            ->container('footer')
            ->add(
                'particles-initiation',
                '/themes/beyond/js/particles-initiation.js',
            );

        return Theme::partial('shortcodes.hero', compact('shortcode'));
    });
    shortcode()->setAdminConfig('hero', function (array $attributes) {
        return Theme::partial('shortcodes.hero-admin-config', compact('attributes'));
    });

    add_shortcode('gallery-area', __('Gallery-area'), __('Gallery-area'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.gallery-area', compact('shortcode'));
    });
    shortcode()->setAdminConfig('gallery-area', function (array $attributes) {
        return Theme::partial('shortcodes.gallery-area-admin-config', compact('attributes'));
    });

    add_shortcode('about-area', __('about-area'), __('about-area'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.about-area', compact('shortcode'));
    });
    shortcode()->setAdminConfig('about-area', function (array $attributes) {
        return Theme::partial('shortcodes.about-area-admin-config', compact('attributes'));
    });

    add_shortcode('brand-area', __('Clients-area'), __('Clients-area'), function (ShortcodeCompiler $shortcode) {

        $clients = \Botble\Clients\Models\Clients::all();
        return Theme::partial('shortcodes.brand-area', compact('shortcode','clients'));
    });
    shortcode()->setAdminConfig('brand-area', function (array $attributes) {
        return Theme::partial('shortcodes.brand-area-admin-config', compact('attributes'));
    });

    add_shortcode('project-area', __('project-area'), __('project-area'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.project-area', compact('shortcode'));
    });
    shortcode()->setAdminConfig('project-area', function (array $attributes) {
        return Theme::partial('shortcodes.project-area-admin-config', compact('attributes'));
    });
    add_shortcode('video-area', __('video-area'), __('video-area'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.video-area', compact('shortcode'));
    });
    shortcode()->setAdminConfig('video-area', function (array $attributes) {
        return Theme::partial('shortcodes.video-area-admin-config', compact('attributes'));
    });

    add_shortcode('service-area', __('service-area'), __('service-area'), function (ShortcodeCompiler $shortcode) {
        $services = \Botble\Services\Models\Services::all();

        return Theme::partial('shortcodes.service-area', compact('shortcode','services'));
    });

    shortcode()->setAdminConfig('service-area', function (array $attributes) {
        return Theme::partial('shortcodes.service-area-admin-config', compact('attributes'));
    });

    add_shortcode('service-page', __('service-page'), __('service-page'), function (ShortcodeCompiler $shortcode) {
        $services = \Botble\Services\Models\Services::all();
        $clients = \Botble\Clients\Models\Clients::all();
        return Theme::partial('shortcodes.service-page', compact('shortcode','services','clients'));
    });
    shortcode()->setAdminConfig('service-page', function (array $attributes) {
        return Theme::partial('shortcodes.service-page-admin-config', compact('attributes'));
    });

    add_shortcode('about-page', __('about page'), __('about page'), function (ShortcodeCompiler $shortcode) {

        return Theme::partial('shortcodes.about-page', compact('shortcode'));
    });
    shortcode()->setAdminConfig('about-page', function (array $attributes) {
        return Theme::partial('shortcodes.about-page-admin-config', compact('attributes'));
    });

    add_shortcode('numbers', __('Agency Numbers'), __('Agency Numbers'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.numbers-page', compact('shortcode'));
    });
    shortcode()->setAdminConfig('numbers', function (array $attributes) {
        return Theme::partial('shortcodes.numbers-admin-config', compact('attributes'));
    });

    add_shortcode('contact-area', __('Contact area'), __('Contact area'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.contact-area', compact('shortcode'));
    });
    shortcode()->setAdminConfig('contact-area', function (array $attributes) {
        return Theme::partial('shortcodes.contact-area-admin-config', compact('attributes'));
    });

    add_shortcode('resources', __('Resources'), __('Resources'), function (ShortcodeCompiler $shortcode) {
        $blog_posts=get_posts_by_category(10);
        $blog_news=get_posts_by_category(9);
        return Theme::partial('shortcodes.resources', compact('shortcode','blog_posts','blog_news'));
    });
    shortcode()->setAdminConfig('resources', function (array $attributes) {
        return Theme::partial('shortcodes.resources-admin-config', compact('attributes'));
    });

    add_shortcode('contact-page', __('Contact page'), __('Contact page'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.contact-page', compact('shortcode'));
    });
    shortcode()->setAdminConfig('contact-page', function (array $attributes) {
        return Theme::partial('shortcodes.contact-page-admin-config', compact('attributes'));
    });


    add_shortcode('case-studies', __('Case Studies'), __('Case Studies'), function (ShortcodeCompiler $shortcode) {
        $casestudies = \Botble\Casestudy2\Models\Casestudy2::query()
            //->with($with)

            ->where(['is_featured'=>1])
            ->wherePublished()
            ->get();
      
        return Theme::partial('shortcodes.case-studies', compact('shortcode','casestudies'));
    });
    shortcode()->setAdminConfig('case-studies', function (array $attributes) {
        return Theme::partial('shortcodes.case-studies-admin-config', compact('attributes'));
    });

    add_shortcode('our-clients', __('Our Clients'), __('Our Clients'), function (ShortcodeCompiler $shortcode) {
        $clients = \Botble\Clients\Models\Clients::all();
        return Theme::partial('shortcodes.our-clients', compact('shortcode','clients'));
        
    });

    shortcode()->setAdminConfig('our-clients', function (array $attributes) {
        return Theme::partial('shortcodes.our-clients-admin-config', compact('attributes'));
    });

    add_shortcode('lets-talk', __('Lets Talk'), __('Lets Talk'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.lets-talk', compact('shortcode'));
    });
    shortcode()->setAdminConfig('lets-talk', function (array $attributes) {
        return Theme::partial('shortcodes.lets-talk-admin-config', compact('attributes'));
    });

    add_shortcode('team', __(' Team'), __(' Team'), function (ShortcodeCompiler $shortcode) {
        return Theme::partial('shortcodes.team-area', compact('shortcode'));
    });
    shortcode()->setAdminConfig('team', function (array $attributes) {
        return Theme::partial('shortcodes.team-area-admin-config', compact('attributes'));
    });
});
