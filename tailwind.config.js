import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1rem',
            },
            screens: {
                xs: '480px',
                sm: '640px',
                md: '768px',
                lg: '1024px',
                xl: '1280px',
            },
        },
        extend: {
            screens: {
                'xs': '480px',
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
                '3xl': '1600px',

                ...defaultTheme.screens,
            },
            fontFamily: {
                "Lato": ["Lato", 'sans-serif'],
                "Montserrat": ["Montserrat", 'sans-serif'],

                ...defaultTheme.fontFamily,
            },
            fontSize: {
                'heading-1': ['2.5rem', '3rem'],
                'heading-2': ['2rem', '2.5rem'],
                'heading-3': ['1.75rem', '2rem'],
                'heading-4': ['1.5rem', '2rem'],
                'heading-5': ['1.25rem', '1.75rem'],
                'heading-6': ['1rem', '1.5rem'],

               'font-48px': ['3rem', '3.5rem'],
                'font-40px': ['2.5rem', '3rem'],
                'font-32px': ['2rem', '2.5rem'],
                'font-28px': ['1.75rem', '2.25rem'],
                'font-24px': ['1.5rem', '2rem'],
                'font-22px': ['1.375rem', '1.75rem'],
                'font-20px': ['1.25rem', '1.75rem'],
                'font-18px': ['1.125rem', '1.5rem'],
                'font-16px': ['1rem', '1.5rem'],
                'font-14px': ['0.875rem', '1.25rem'],
                'font-12px': ['0.75rem', '1rem'],
            },

            colors: {
                'primary': '#54B5D9',
                'primary-hover': '#0188bd',
                'secondary': '#a4d233',
                'secondary-hover': '#b2d952',
                'tertiary': '#F02737',
                'tertiary-hover': '#f03d45',

                'orange': '#F2A900',
                'orange-hover': '#f4b626',

                'dark-blue': '#0C4058',
                'white': '#FFFFFF',
                'black': '#000000',
                'light-gray': '#F6F6F8',
                'dark': '#333333',
                'gray': '#737373',
                'amber': '#f7b9296e',
                'amber-light': '#92400E',

                ...defaultTheme.colors,
            },

            boxShadow: {
                'btn-primary': 'inset 0 1px 0 hsla(0,0%,100%,.15),0 1px 1px rgba(0,0,0,.075)',
                'btn-secondary': '0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb),.5)',

                ...defaultTheme.boxShadow,
            }
        },
    },
    plugins: [
        require('daisyui'),
    ],
};
