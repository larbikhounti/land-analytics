import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

export const user = computed(() => {
    const page = usePage();
    return page.props.auth.user;
});
