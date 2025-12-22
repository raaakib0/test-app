<template>
    <div>
        <h1>Task Manager</h1>
        <TaskForm @created="fetchTasks" />
        <TaskList :tasks="tasks" @updated="fetchTasks" />
    </div>
</template>

<script lang="ts">
import axios from 'axios';
import { defineComponent, onMounted, ref } from 'vue';
import TaskForm from './TaskForm.vue';
import TaskList from './TaskList.vue';
import type { Task } from './type';

export default defineComponent({
    components: { TaskForm, TaskList },

    setup() {
        const tasks = ref<Task[]>([]);
        const fetchTasks = async () => {
            const res = await axios.get('/api/tasks');
            tasks.value = res.data;
        };
        onMounted(fetchTasks);
        return { tasks, fetchTasks };
    },
});
</script>
