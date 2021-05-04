<template>
    <div>
        <div v-for="(item, index)  in items" :key="index" >
            <list-item 
                :item="item"
                class="item"
                v-on:itemchanged="$emit('reloadlist')"
            />
        </div>
    </div>
</template>

<script>

import listItem from "./listItem"
import ListItem from './listItem.vue'

export default {
    props: ['items'],
    components:{
        listItem
    }
}
</script>

<style scoped>
.item{
    background-color: #e6e6e6;
    padding: 5px;
    margin-top: 10px;
}
</style>