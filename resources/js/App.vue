<template>
    <div>
        <h1>Task Manager</h1>
        <TaskForm @created="fetchTasks" />
        <TaskList :tasks="tasks" @updated="fetchTasks"/>
    </div>
</template>

<scritp lang="ts">

export default defineComponent({
    
})

</scritp>