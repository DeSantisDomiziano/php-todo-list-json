const { createApp } = Vue

createApp({
  data() {
    return {
        tasks: null,
        api_data: 'data_php.php'
    }
  },
  mounted() {
    axios
    .get(this.api_data)
    .then(resp => {
        console.log(resp.data);
        this.tasks = resp.data;
    })
  }
}).mount('#app')