<template>
    <slot name="title" msg="title" />
    <button v-on="{click:Mtest}">
        <slot :msg='test'/>
    </button>
</template>

<script>
export default {
name: "btn",
    data:()=>({
       test:'test body'
    }),
    methods:{
        Mtest(){
          alert('ok')
        },
    }
}
</script>

<style scoped>

</style>
