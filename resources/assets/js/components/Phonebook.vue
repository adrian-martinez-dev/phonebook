<template>
  <div>

    </br>

    <h1 class="text-center">
      Agenda Telefónica
    </h1>

    </br>

    <!--Búsqueda-->
    <div class="mx-auto" style="width: 400px;">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Contacto...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Buscar</button>
        </span>
      </div>
    </div>
    </br>

    <!--Entrada de datos-->
    <form class="mx-auto col-md-6">
      <div class="form-row">
        <div class="col-6">
          <input v-model="id" type="hidden" class="form-control">
          <input v-model="name" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="col-4">
          <input v-model="phone" type="text" class="form-control" placeholder="Teléfono">
        </div>
        <div class="col-2">
          <button @click="saveContact" type="button" class="btn btn-success">Guardar</button>
        </div>
      </div>
    </form>

    </br>

    <!--Tabla con datos-->
    <div class="mx-auto col-md-6">

      <table class="table">
        <thead>
          <tr>
            <th class="col-md-2">Nombre</th>
            <th class="col-md-2">Telefono</th>
            <th class="col-md-2"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="contact in contacts">
            <td>{{ contact.name }}</td>
            <td>{{ contact.phone }}</td>
            <td>
              <div class="btn-group">
                <button @click="editContact(contact.id, contact.name, contact.phone)" type="button" class="btn btn-primary">Editar</button>
                <button @click="deleteContact(contact.id)" type="button" class="btn btn-danger">Borrar</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  <pre>
    @{{ $data }}
  </pre>
  </div>
</template>
<script>
export default {
  mounted () {
    this.getContacts();
  },
  data () {
    return {
      contacts: [],
      id: '',
      name: '',
      phone: '',
      edit: 0
    };
  },
  methods: {
    getContacts: function () {
      var urlContacts = 'contacts';
      axios.get(urlContacts).then(response => {
        this.contacts = response.data;
      }).catch(e => {
        this.errors.push(e);
      });
    },
    editContact: function (id, name, phone) {
      this.id = id;
      this.name = name;
      this.phone = phone;
      this.edit = 1;
    },
    saveContact: function () {
      var urlSave = 'contacts/';
      if (this.edit === 1) {
        axios.put(urlSave + this.id, {
          id: this.id,
          name: this.name,
          phone: this.phone
        }).then(response => {
          console.log('Actualizado');
          this.getContacts();
          this.edit = 0;
        });
      } else if (this.edit === 0) {
        axios.post(urlSave, {
          name: this.name,
          phone: this.phone
        }).then(response => {
          this.getContacts();
          console.log('Nuevo');
        });
      }
      this.id = '';
      this.name = '';
      this.phone = '';
    },
    deleteContact: function (id) {
      var urlContact = 'contacts/' + id;
      axios.delete(urlContact).then(response => {
        console.log('Borrado');
        this.getContacts();
      });
    }
  }
};
</script>
