<template>
  <div class="background-image">
  <b-container>
  <div class="margin1">
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <div class="margin2">
     <div class="margin3">

      <b-form-group
        id="input-group-1"
        label="Member's Name:"
        label-for="input-1"
      >
        <b-form-input
          id="input-1"
          v-model="form.name"
          required
          placeholder="Please enter your name"
        ></b-form-input>
      </b-form-group>
      <br>
      <b-form-group 
      id="input-group-2" 
      label="Member's Room Number:" 
      label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.roomNumber"
          required
          placeholder="Please enter your Room Number"
        ></b-form-input>
      </b-form-group>
      <br>
      <b-form-group id="input-group-3" label="Issues Regarding:" label-for="input-3">
        <b-form-select
          id="input-3"
          v-model="form.type"
          :options="complainType"
          required
        ></b-form-select>
      </b-form-group>
      <br>
      <b-form-textarea 
      id="input-group-4" 
      placeholder="Explain issue in detail:" 
      v-model="form.description"
      required
      rows= "4"
      max-rows="6">
      </b-form-textarea>
      <br><br>
      <b-button type="submit" size="lg" variant="primary">Submit</b-button>
      <b-button type="reset" size="lg" variant="danger">Reset</b-button>
      </div>
    </div>
    </b-form>
    
  </div>
</b-container>
</div>
</template>

<script>
  import axios from 'axios'
export default {
  name: 'Complaint',
  data() {
      return {
        form: {
          name: '',
          roomNumber: '',
          type: '',
          description: ''
        },
        complainType: [{ text: 'Select One', value: null }, 'Plumbing', 'Electricity', 'Fitting', 'Water'],
        show: true
      }
    },
    methods: {
      onSubmit(evt) {
        evt.preventDefault()
        const self = this
        console.log(JSON.stringify(self.form))
         axios({
            method: 'post',
            url: 'api/complains.php',
            data: this.form,
            config: { headers: {'Content-Type': 'multipart/form-data' }}
        })
          .then(() => {
            console.log("Successfully written in db")
          })
        alert(JSON.stringify(this.form))
      },
      onReset(evt) {
        evt.preventDefault()
        this.form.name = ''
        this.form.roomNumber = ''
        this.form.type = null
        this.form.description = ''
        
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
}
</script>

<style scoped>
.margin1{

  padding-top: 1.2em; 
  padding-bottom: 50%;
  
}
.margin2{
    color: #000000;
    margin-top: 4em;
    font-weight: bold;
    font-size: 18px;
}
.margin3{}
.background-image{
    background-image: url('../assets/homepage.jpg');
}
b-form-group{
  margin-top: 10px;

}
h1, h2 {
  font-weight: normal;
  

}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
