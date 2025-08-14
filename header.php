<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="relative bg-v flex justify-between items-center px-6 bg-transparent z-20 w-full">
    <!-- Logo -->
    <div class="text-2xl font-bold">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" 
                alt="<?php bloginfo('name'); ?>" 
                class="h-12 w-auto"
                loading="lazy"
                width="100"
                height="100"
            >
        </a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:flex flex-grow justify-center items-center" aria-label="Main navigation">
        <div class="rounded-full border-2 border-gradient mt-1 p-1 px-7">
            <ul class="flex space-x-5 text-lg">
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-blue-500">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/hosting')); ?>" class="hover:text-blue-500">Web Hosting</a></li>
                <li><a href="<?php echo esc_url(home_url('/domain')); ?>" class="hover:text-blue-500">Domains</a></li>
                <li><a href="<?php echo esc_url(home_url('/courses')); ?>" class="hover:text-blue-500">Courses</a></li>
                <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="hover:text-blue-500">Projects</a></li>
            </ul>
        </div>
    </nav>

    <!-- Let's Connect Button (Desktop) -->
    <div class="hidden lg:block">
        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="px-6 py-2 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full hover:shadow-lg transition">
            Lets Connect
        </a>
    </div>

    <!-- Mobile Hamburger Menu -->
    <div class="lg:hidden">
        <button id="mobile-menu-toggle" class="focus:outline-none">
            <div class="w-6 h-0.5 bg-gray-800 mb-1"></div>
            <div class="w-6 h-0.5 bg-gray-800 mb-1"></div>
            <div class="w-6 h-0.5 bg-gray-800"></div>
        </button>
    </div>
</header>

<!-- Mobile Menu (hidden by default) -->
<div id="mobile-menu" class="hidden lg:hidden fixed top-0 left-0 w-full h-full bg-white z-50">
    <div class="p-6">
        <button id="mobile-menu-close" class="mb-6">Close ✕</button>
        <ul class="space-y-4 text-lg">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-blue-500">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/hosting')); ?>" class="hover:text-blue-500">Web Hosting</a></li>
            <li><a href="<?php echo esc_url(home_url('/domain')); ?>" class="hover:text-blue-500">Domains</a></li>
            <li><a href="<?php echo esc_url(home_url('/courses')); ?>" class="hover:text-blue-500">Courses</a></li>
            <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="hover:text-blue-500">Projects</a></li>
            <li><a href="<?php echo esc_url(home_url('/#contact')); ?>" class="hover:text-blue-500">Lets Connect</a></li>
        </ul>
    </div>
</div>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
    document.getElementById('mobile-menu-close').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
</script>
