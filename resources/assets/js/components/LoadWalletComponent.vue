<template>
  <label class="file-select">
    <div class="select-button">
      <span v-if="value">Selected File: {{value.name}}</span>
      <span v-else>Select File</span>
    </div>
    <input type="file" @change="handleFileChange"/>
  </label>
</template>

<script>
export default {
  props: {
    value: File
  },
   data() {
            return{
                Account: {
                    privateKey: [],
                    publicKey: [],
                    utxos: []

                }
            }
        },

  methods: {
    handleFileChange(e) {
      this.$emit('input', e.target.files[0])
      var input = e.target;

    var reader = new FileReader();
    reader.onload = function(){
      var text = reader.result;
      console.log(reader.result.substring(0, 200));
    };
    reader.readAsText(input.files[0]);
    var wallet = JSON.parse( reader.result);
    var account = this.Account;
                account.publicKey=wallet.publicKey;
                account.privateKey=wallet.privateKey;
                account.utxos=wallet.utxos;
    console.log(wallet);

    //axios.get('/user', {
  //  params: {
  //    account: wallet
  //    }
  //  })
    //.then(function (response) {
//      console.log(response);
  //  })
  //  .catch(function (error) {
    //  console.log(error);
  //  });

    }
  }
}
</script>

<style scoped>
.file-select > .select-button {
  padding: 1rem;

  color: white;
  background-color: #2EA169;

  border-radius: .3rem;

  text-align: center;
  font-weight: bold;
}

.file-select > input[type="file"] {
  display: none;
}
</style>
