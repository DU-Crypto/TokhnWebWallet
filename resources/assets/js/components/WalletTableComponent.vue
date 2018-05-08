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
                      
                          <!--  <tr>
                            <td><deposit-component></deposit-component>
                             <a class="btn btn-success" href="{{ url('/withdraw/' . $account->id) }}" >
                                 Withdraw
                              </a></td> -->
                            <!-- <td>{{ $account->address }}</td> -->
                            <!-- <td>{{ $account->balance }}</td> -->
                          <!-- </tr> -->
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