<template>
  <section class="todoapp">
    <header class="header">
      <h1>Nouvelle commande</h1>
      <input type="text" class="new-todo" placeholder="Ajouter une tâche" v-model="newTodo" @keyup.enter="addTodo">

    </header>
    <div class="main">
      <input type="checkbox" class="toggle-all" v-model="allDone">
      <ul class="todo-list">
        <!-- <li class="todo" v-for="todo in filteredtodos" :class="{ completed: todo.completed }">
           <div class="view">
             <input type="checkbox" v-model="todo.completed" claas="toggle">
            <label>{{ todo.name }}</label>
            </div>
        </li>  -->
      </ul>
    </div>
    <footer class="footer">
      <span class="todo-count"><strong>{{ remaining }}</strong>tâche à faire</span>
      <ul class="fliters">
        <li><a href="#" :class="{selected: filter === 'all'}" @click.prevent="filter= 'all'">toutes les commandes</a> </li>
        <li><a href="#" :class="{selected: filter === 'todo'}" @click.prevent="filter= 'todo'">à faire</a> </li>
        <li><a href="#" :class="{selected: filter === 'done'}" @click.prevent="filter= 'done'">faites</a> </li>
        </ul>
      </footer>
  </section>
</template>

<script>
import Vue from "vue";

export default {
  data() {
    return {
      allDone: false,
      todos: [
        {
          name: "Tâche de test",
          completed: false
        }
      ],
      newTodo: "",
      filter: "all"
    };
  },
  methods: {
    addTodo() {
      this.todos.push({
        completed: false,
        name: this.newTodo
      });
      this.newTodo = "";
    }
  },
  computed: {
    // allDone: (){
    //   get (){

    //   }
    // },
    remaining() {
      return this.todos.filter(todo => !todo.completed).lenght;
    },
    filteredTodos() {
      if (this.filter === "todo") {
        return this.todos(todo => !todo.completed);
      } else if (this.filter === "done") {
        return this.todos(todo => todo.completed);
      }
      return this.todos;
    }
  }
};
</script>

<style src="./todo.css"></style>