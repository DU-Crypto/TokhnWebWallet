

<template>

<button type="submit" class="btn btn-success" v-on:click="createWallet">
    Generate Wallet</button>

</template>

<script>

export default {
    mounted() {
            console.log('Component mounted.')
        },

        methods: {
            createWallet: function() {
                var EC = require('elliptic').ec;
                var ec = new EC('p192');
                var key = ec.genKeyPair();
                var privateKey = key.getPrivate();
                var publicKey = key.getPublic();
                var x = publicKey.getX();
                var y = publicKey.getY();


                // Public Key MUST be either:
                // 1) '04' + hex string of x + hex string of y; or
                // 2) object with two hex string properties (x and y); or
                // 3) object with two buffer properties (x and y)
                var address = publicKey.encode('sha256'); // case 1

                var pubstr = {
                    x: x.toString('hex'),
                    y: y.toString('hex')
                }; // case 2
                //var pubbuff = {
                //    x: x.toBuffer(),
                //    y: y.toBuffer()
                //}; // case 3
                var pubarr = {
                    x: x.toArrayLike(Buffer),
                    y: y.toArrayLike(Buffer)
                }; // case 3

                // Import public key
                var key = ec.keyFromPublic(address, 'hex');

                var utxos = [];
                console.log(privateKey);

                var file = '/tmp/Wallet.json'
                     var wallet = {"publicKey":publicKey,"privateKey":privateKey,"utxos":utxos};
                  var walletJSON =JSON.stringify(wallet);

              console.log(walletJSON);
              this.save('Wallet.json',walletJSON)
            }
        }

}

</script>
