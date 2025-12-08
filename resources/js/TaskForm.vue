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
const title=ref('');
const submit = async()=>{
    if(!title.value) return;
    await axios.post('/api/tasks', {title: title.value});
    title.value ='';
    emit('crated');
}
};
    });
</script>