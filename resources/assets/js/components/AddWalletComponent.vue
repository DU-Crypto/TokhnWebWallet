<template>
     <button type="submit" class="btn btn-success" v-on:click="createWallet">Generate Wallet</button>
</template>

<script>
      export default {
        mounted() {
            console.log('Component mounted.')
        },
           
        methods: { 
            createWallet: function(){
                var EC = require('elliptic').ec;
                var ec = new EC('p192');
                var privateKey = ec.genKeyPair();
                //const ECKey = require('ec-key');
                // var jsonfile = require('jsonfile')
                // var fs = require('fs')
                // Create a new (random) ECKey instance using the secp521r1 curve
                var privateKey = ECKey.createECKey();
                var publicKey = privateKey.pub();
                var utxos =[];
                
                
                var file = '/tmp/Wallet.json'
                var wallet = {"publicKey":publicKey,"privateKey":privateKey,"utxos":utxos};
                var walletJSON =JSON.stringify(wallet);
         
                console.log(walletJSON);
                this.save('Wallet.json',walletJSON)
            },
            save: function(filename, data) {
                var blob = new Blob([data], {type: 'text/csv'});
                if(window.navigator.msSaveOrOpenBlob) {
                    window.navigator.msSaveBlob(blob, filename);
                }
                else{
                    var elem = window.document.createElement('a');
                    elem.href = window.URL.createObjectURL(blob);
                    elem.download = filename;        
                    document.body.appendChild(elem);
                    elem.click();        
                    document.body.removeChild(elem);
                }
            }
        }

    }
</script>
