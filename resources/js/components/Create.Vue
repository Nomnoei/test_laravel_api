<template>
    <div class="container">

      <h2>ระบบบันทึกข้อมูล</h2>

          <form action="/users">
            <fieldset class="form-group">
              <label for="formGroupExampleInput">ชื่อ : </label>
              <input type="text" v-model="name" class="form-control" id="formGroupExampleInput" placeholder="ชื่อ">
            </fieldset>
            <fieldset class="form-group">
              <label for="formGroupExampleInput2">จังหวัด : </label>
              <input type="text"  v-model="city" class="form-control" id="formGroupExampleInput2" placeholder="จังหวัด">
            </fieldset>
            <fieldset class="form-group">
              <button v-on:click="addNewUser()" class="btn btn-primary">เพิ่มข้อมูล</button>
              </fieldset>
          </form>


    </div>
</template>

<script>
    export default {

      data(){
        return{
          name:'',
          city:''
        }
      },
      methods:{
        addNewUser(){
          axios.post('/api/users',{
            name:this.name,
            city:this.city
          });
          // axios.post({'/api/users',{
          //   name:this.name,
          //   city:this.city,
          // });
          // console.log(this.name);
          // console.log(this.city);
        }
      }
    }
</script>
