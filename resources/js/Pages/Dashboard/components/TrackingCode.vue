<script setup>
const props = defineProps(['user_ad_id','page_ad_id','tracked_button_id']);

function Scriptd(){
    return `<script>
    (function(i,s,o,g,r,a,m){i['MdfAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.mdf-analytics.com/analytics.js','Track');
    
    Track('user_ad_id', ${props.user_ad_id}, 'auto')
    Track('page_ad_id', ${props.page_ad_id})
    Track('tracked_button_id', ${props.tracked_button_id})
<\/script>`
}
</script>

<script>
import 'highlight.js/lib/common';
import hljsVuePlugin from "@highlightjs/vue-plugin";

export default {
    components: {
        Highlightjs: hljsVuePlugin.component
    }    
}
</script>

<template>
    <Highlightjs v-if="user_ad_id" class="border w-full overflow-scroll h-60"
        language="js"
        :code="Scriptd()"
    />
</template>