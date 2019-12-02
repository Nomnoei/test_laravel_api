<template>
    <div class="container">

      <h2>ระบบแก้ไขข้อมูล</h2>

          <form action="/users">
            <fieldset class="form-group">
              <label for="formGroupExampleInput">ชื่อ : </label>
              <input type="text" v-model="name" class="form-control" id="formGroupExampleInput" placeholder="ชื่อ-นามสกุล">
            </fieldset>
            <fieldset class="form-group">
              <label for="formGroupExampleInput2">จังหวัด : </label>
              <input type="text"  v-model="city" class="form-control" id="formGroupExampleInput2" placeholder="จังหวัด">
            </fieldset>
            <fieldset class="form-group">
              <button class="btn btn-primary" v-on:click="UpdateUser()">อัพเดทข้อมูล </button>
              </fieldset>
          </form>


    </div>
</template>

<script>
    export default {
      props:['id'],

      data(){
        return{
          name:'',
          city:''
        }
      },mounted(){
        axios.get('/api/users/'+this.id).then(response=>{
          // console.log(response.data);
          var user=response.data;
          this.name=user.name;
          this.city=user.city;
        });
      },
      methods:{
        UpdateUser(){
          axios.put('/api/users/'+this.id,{
            name:this.name,
            city:this.city
          });
        }
      }

    }
</script>
