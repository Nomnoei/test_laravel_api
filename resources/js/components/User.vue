
<template>
<div class="container">
    <h2 class="text-center">แสดงข้อมูล</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>รหัส</th>
                <th>ชื่อ</th>
                <th>จังหวัด</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(user,index) in users">
                <td>{{user.id}}</td>
                <td>{{user.name}}</td>
                <td>{{user.city}}</td>
                <td><a :href="'users/'+user.id+'/edit'" class="btn btn-primary">Edit</a></td>
                <td><a  v-on:click="deleteUser(user.id,index)" href="javascript:;" class="btn btn-danger">Delete</a></td>
            </tr>
        </tbody>

    </table>
    <a href="/users/create" class="btn btn-primary">เพิ่มข้อมูล</a>
</div>



</template>

<script>
export default {
    mounted() {
        this.getUserData();

    },
    methods: {
        getUserData() {
            axios.get('api/users').then(response => {
                // console.log(response.data;);
                this.users = response.data;

            });


            axios.get('show').then(response => {
                // console.log(response.data;);
                //name:this.name,
                //city:this.city
                users:this.users

            });



        },
        deleteUser(id,index){
          axios.delete('api/users/'+id).then(response => {
              this.users.splice(index,1);
          });
        }


    },
    data() {
        return {
            users: [],
            user: {
                id: 0,
                name: '',
                city: '',
            }
        }
    }
}
</script>
