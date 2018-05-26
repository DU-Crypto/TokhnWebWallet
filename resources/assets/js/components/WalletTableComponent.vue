 <template>

      <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th>Network</th>
                        <th>Address</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>

                       <!-- @foreach ($accounts as $account) -->

                         <tr>
                            <td>
                        luv
                            </td>
                             <td>04f101b45bd310249c0ffd6a1f3217689c8b3265ac0078c562f8d617df7126a6e8c1a703565f8342a747ea107dd9b6d849</td>
                            <td>0</td>
                        </tr>
                      <!-- @endforeach -->
                    </tbody>
          </table>
</template>
<script>
    export default {
        props: ['wallet'],
        mounted() {
          console.log('Component mounted.')
             // Do something useful with the data in the template
        console.dir(this.wallet)
        },

        created() {

            console.log(this.wallet); // output is "undefined"

        },

        data() {
            return {

            }
        }


    }

</script>
