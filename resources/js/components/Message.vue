<template>
    <div>
        <li class="list-group-item" :class="className"><slot></slot>
        <span id="time">{{ time }}</span></li>
        <small class="badge " :class="className">{{ user }}</small>
    </div>
</template>

<script>
export default {
    props: [
        'color',
        'user',
        'time',
    ],
    computed: {
        className() {
            return 'list-group-item-'+this.color;
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style>
#time {
    font-size: 10px;
    float: right;
}
</style>
