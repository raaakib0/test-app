<template>
    <div>
        <div v-for="task in tasks" :key="task.id">
            <input type="checkbox" :checked="task.completed" @change="toggle(task)">
            <span :style="{textDecoration:task.completed? 'line-through' : 'none'}">{{ task.title }}</span>
        <button @click="remove(task.id)" >Delete</button>
        </div>
    </div>
</template>

<script lang="ts">
    import {defineComponent} from 'vue';
    import axios from  'axios';
import { Task } from "./types";


export default defineComponent({
props:{tasks: Array as ()=> Task[] },
emit: ['updated'],

setup(props,{emit}){
const toggle =  async (task: Task)=>{
await axios.put(`/api/tasks/${task.id}`, {completed: !task.completed});
emit('updated');
};
};

});

</script>