import { computed } from "vue";
import { usePage } from '@inertiajs/vue3';

export const pathname = (route) => {
    const page = usePage();
    return page.url.startsWith(route);
};
