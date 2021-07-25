import AppForm from '../app-components/Form/AppForm';

Vue.component('disciplina-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nome:  '' ,
                turma:  '' ,
                professor:  '' ,
                curso: '' ,
                lancar_para_turma: false,
                lancar_para_curso: true,
                activated:  true ,

            }
        }
    },
    watch: {
        'form.lancar_para_turma': {
            handler: function handler() {
                if (this.form.lancar_para_turma) {
                    this.form.lancar_para_curso = false;
                }
            }
        },
        'form.lancar_para_curso': {
            handler: function handler() {
                if (this.form.lancar_para_curso) {
                    this.form.lancar_para_turma = false;
                }
            }
        }
    }

});
