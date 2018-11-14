new Vue({
  el: '#main',
  created: function() {
      this.getUsers()
  },
  data:{
    id:'',
    task:'',
    description:'',
    lists:[],
    mensaje:'',
    editar:false
  },
  methods: {
    limpiar:function(){
      this.task='',
      this.description='',
      this.editar=false
      this.mensaje=""
    },
    error: function(){
      this.mensaje="Datos incompletos"
    },
    getUsers: function() {
      this.$http.get('controllers/crud/read.php').then(function(response){
        var datos = response.data
        if (datos==0) {
          this.lists=0
        }else {
          this.lists = response.data
        }
      })
    },
    login: function() {
      if (this.task=="" || this.description=="") {
        this.error()
      }else{
        this.$http.post('controllers/crud/create.php',{
          task: this.task,
          description: this.description
        }).then(e=>{
          this.limpiar()
          this.getUsers()
          this.mensaje=""
        })
      }
    },
    _editar: function(id,tarea,descripcion){
      this.editar=true
      this.id=id,
      this.task=tarea,
      this.description=descripcion
      this.mensaje=""
    },
    update: function(){
      this.$http.post('controllers/crud/update.php',{
        id:this.id,
        task: this.task,
        description: this.description
      }).then(e=>{
        this.limpiar()
        this.getUsers()
        this.mensaje=""
      })
    },
    _eliminar: function(id) {
      this.$http.post('controllers/crud/delete.php',{
        id:id
      }).then(e=>{
        this.getUsers()
        this.mensaje=""
      })
    }

  }
})
