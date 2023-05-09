const { createApp } = Vue

createApp({
  data() {
    return {
        tasks: null,
        newTask: '',
        api_data: 'data_php.php',
        api_addData: 'add_data.php',
        api_deleteData: 'delete_data.php',
    }
  },
  methods: {
    addTask() {
        const data = { newTask: this.newTask }

        axios
        .post(this.api_addData,
            data,
            {
                headers: {'Content-Type': 'multipart/form-data'}
            })
        .then(resp => {
            this.task = resp.data
            location.reload();
        })
    },
    deleteTask(i) {
        const data = { i }

        axios
        .post(this.api_deleteData,
            data,
            {
                headers: {'Content-Type': 'multipart/form-data'}
            })
        .then(resp => {
            this.task = resp.data
            location.reload();
        })
    }

  },
  mounted() {
    axios
    .get(this.api_data)
    .then(resp => {
        this.tasks = resp.data;
    })
  }
}).mount('#app')