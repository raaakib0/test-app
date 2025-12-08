<template>
    <form submit.prevent="submit">
<input v-model="title" placeholder="Task Title"required />
<button type="submit" >Add</button>
    </form>
</template>
<script lang="ts">
    export default defineComponent({
emits: ['created'],
setup(_,{emit}){

};
    });
</script>