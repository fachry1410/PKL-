<template>
    <div class="card-body">
    <form role="form" action="" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Product</label>
          <select class="form-control">
              <option v-for="{item, index} in categories">{{ item.name }}</option>
          </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
import store from '../../store'
import * as actions from "../../store/action-types";
import {mapGetters} from 'vuex'
  export default {
    computed: {
        ...mapGetters({
            'categories' : 'getCategories'
        })
    },
    mounted(){
      store.dispatch(actions.GET_CATEGORIES);
    }
  }
</script>


