<template>
    <table>
    <thead>
      <tr>
        <th>STT</th>
        <th v-for="key in columns" @click="sortBy(key)" :class="{ active: sortKey == key }" :key="key">
          <span v-if="nameColumns[key]">
            {{ nameColumns[key] | capitalize }}
          </span>
          <span v-else>
            {{ key | capitalize }}
          </span>        
          <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'"></span>
        </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(entry, index) in filteredLists">
        <td>{{index +1}}</td>
        <td v-for="key in columns" :key="key">
          {{entry[key]}}
        </td>
        <td>
          <button @click="$emit(editItem)" class="btn btn-primary btn-sm">sửa</button>
          <button  @click="$emit(deleteItem)" class="btn btn-danger btn-sm">xoá</button>
        </td>
      </tr>
    </tbody>
  </table>
</template>
<script>
export default {
    props: {
        lists: Array,
        columns: Array,
        nameColumns: Object,
        filterKey: String
    },
    data: function () {
        var sortOrders = {}
        this.columns.forEach(function (key) {
          sortOrders[key] = 1
        })
        return {
          sortKey: '',
          sortOrders: sortOrders
        }
    },
    computed: {
      filteredLists: function () {
        var sortKey = this.sortKey
        var filterKey = this.filterKey && this.filterKey.toLowerCase()
        var order = this.sortOrders[sortKey] || 1
        var lists = this.lists
        if (filterKey) {
            lists = lists.filter(function (row) {
            return Object.keys(row).some(function (key) {
                return String(row[key]).toLowerCase().indexOf(filterKey) > -1})
            })
        }
        if (sortKey) {
            lists = lists.slice().sort(function (a, b) {
              a = a[sortKey]
              b = b[sortKey]
              return (a === b ? 0 : a > b ? 1 : -1) * order
            })
        }
        return lists
        }
    },
    filters: {
        capitalize: function (str) {
        return str.charAt(0).toUpperCase() + str.slice(1)
        }
    },
    methods: {
        sortBy: function (key) {
        this.sortKey = key
        this.sortOrders[key] = this.sortOrders[key] * -1
        }
    }
}
</script>
<style scoped>
table {
  border-radius: 3px;
  background-color: #fff;
}

th {
  background-color: #418BCA;
  color: rgba(255,255,255,0.66);
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

td {
  background-color: #f9f9f9;
}

th, td {
  min-width: 120px;
  padding: 10px 20px;
  border-top: 1px solid #ccc5b9;
}

th.active {
  color: #fff;
}

th.active .arrow {
  opacity: 1;
}

.arrow {
  display: inline-block;
  vertical-align: middle;
  width: 0;
  height: 0;
  margin-left: 5px;
  opacity: 0.66;
}

.arrow.asc {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-bottom: 4px solid #fff;
}

.arrow.dsc {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #fff;
}
</style>