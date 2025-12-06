<template>
    <div>
        <h1>Task Manager</h1>
        <TaskForm @created="fetchTasks" />
        <TaskList :tasks="tasks" @updated="fetchTasks"/>
    </div>
</template>

<scritp lang="ts">
import {defineComponent,ref, onMounted  } from "vue";
import axios from 'axios';
import TaskForm from './components/TaskForm.vue';
import TaskList from './components/TaskList.vue';
import type {Task} from './type';

export default defineComponent({
    components: {TaskForm, TaskList},

setup(){
const tasks = ref<Task[]>([]);
const fetchTasks = async ()=>{
    const res = await axios.get('api/tasks');
    tasks.value = res.data;
};
onMounted(fetchTasks);
return{tasks,fetchTasks};
};

})

</scritp>