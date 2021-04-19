<template>
    <ul>
        <li v-for="i in msg">{{i.id}}</li>
    </ul>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    name: 'test',
    props: [
        'msg'
    ]
}
</script>

