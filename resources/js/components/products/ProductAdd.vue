<template>
    <div class="card-body">
    <form role="form" action="" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Product</label>
        <input name="name" type="text" class="form-control" placeholder="Masukkan nama Product" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
import store from '../../store'
import * as actions from "../../store/action-types";
  export default {
    mounted(){
      store.dispatch(actions.GET_CATEGORIES);
    }
  }
</script>


