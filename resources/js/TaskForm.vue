<template>
    <form submit.prevent="submit">
        <input v-model="title" placeholder="Task Title" required />
        <button type="submit">Add</button>
    </form>
</template>
<script lang="ts">
import axios from 'axios';
import { defineComponent, ref } from 'vue';
export default defineComponent({
    emits: ['created'],
    // setup(_, { emit }) {
    //     const title = ref('');
    //     const submit = async () => {
    //         if (!title.value) return;
    //         await axios.post('/api/tasks', { title: title.value });
    //         title.value = '';
    //         emit('created');
    //     };
    //     return { title, submit };
    // },
    setup(_,{emit}){
        const title = ref('');
        const submit = async() =>{
            if(!title.value) return;
            await axios.post('/api/tasks', {title: title.value});
            title.value='';
            emit('created');
        };
        return {title, submit};
    },
});
</script>
