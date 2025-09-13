/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',  // Blade-шаблоны
        './resources/**/*.js',          // JS-файлы (Vue, Inertia)
        './resources/**/*.vue',         // Vue компоненты
    ],
    theme: {
        extend: {
            colors: {
                primary: '#4f46e5',
                secondary: '#f59e0b',
                accent: '#10b981',
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui'],
            },
        },
    },
    plugins: [],
}
