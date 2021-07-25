<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nome'), 'has-success': fields.nome && fields.nome.valid }">
    <label for="nome" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.disciplina.columns.nome') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nome" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nome'), 'form-control-success': fields.nome && fields.nome.valid}" id="nome" name="nome" placeholder="{{ trans('admin.disciplina.columns.nome') }}">
        <div v-if="errors.has('nome')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nome') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('lancar_para_turma'), 'has-success': fields.lancar_para_turma && fields.lancar_para_turma.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="lancar_para_turma" type="checkbox" v-model="form.lancar_para_turma" v-validate="''" data-vv-name="lancar_para_turma"  name="lancar_para_turma_fake_element">
        <label class="form-check-label" for="lancar_para_turma">
            {{ trans('admin.disciplina.columns.lancar_para_turma') }}
        </label>
        <input type="hidden" name="lancar_para_turma" :value="form.lancar_para_turma">
        <div v-if="errors.has('lancar_para_turma')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lancar_para_turma') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('lancar_para_curso'), 'has-success': fields.lancar_para_curso && fields.lancar_para_curso.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="lancar_para_curso" type="checkbox" v-model="form.lancar_para_curso" v-validate="''" data-vv-name="lancar_para_curso"  name="lancar_para_curso_fake_element">
        <label class="form-check-label" for="lancar_para_curso">
            {{ trans('admin.disciplina.columns.lancar_para_curso') }}
        </label>
        <input type="hidden" name="lancar_para_curso" :value="form.lancar_para_curso">
        <div v-if="errors.has('lancar_para_curso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lancar_para_curso') }}</div>
    </div>
</div>

<div v-if="form.lancar_para_turma" class="form-group row align-items-center" :class="{'has-danger': errors.has('turma'), 'has-success': fields.turma && fields.turma.valid }">
    <label for="turma" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.disciplina.columns.turma_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{-- <input type="text" v-model="form.turma_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('turma_id'), 'form-control-success': fields.turma_id && fields.turma_id.valid}" id="turma_id" name="turma_id" placeholder="{{ trans('admin.disciplina.columns.turma_id') }}"> --}}
        <multiselect
            v-model="form.turma"
            track-by="id"
            :options="{{ $turmas->toJson() }}"
            :multiple="true"
            placeholder="{{ trans('admin.forms.select_turmas') }}"
            label="nome">
        </multiselect>
        <div v-if="errors.has('turma')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('turma') }}</div>
    </div>
</div>

<div v-if="form.lancar_para_curso" class="form-group row align-items-center" :class="{'has-danger': errors.has('curso'), 'has-success': fields.curso && fields.curso.valid }">
    <label for="curso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.disciplina.columns.curso_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{-- <input type="text" v-model="form.curso_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('curso_id'), 'form-control-success': fields.curso_id && fields.curso_id.valid}" id="curso_id" name="curso_id" placeholder="{{ trans('admin.disciplina.columns.curso_id') }}"> --}}
        <multiselect
            v-model="form.curso"
            track-by="id"
            :options="{{ $cursos->toJson() }}"
            :multiple="false"
            placeholder="{{ trans('admin.forms.select_curso') }}"
            label="nome">
        </multiselect>
        <div v-if="errors.has('curso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('curso') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('professor'), 'has-success': fields.professor && fields.professor.valid }">
    <label for="professor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.disciplina.columns.professor_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{-- <input type="text" v-model="form.professor_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('professor_id'), 'form-control-success': fields.professor_id && fields.professor_id.valid}" id="professor_id" name="professor_id" placeholder="{{ trans('admin.disciplina.columns.professor_id') }}"> --}}
        <multiselect
            v-model="form.professor"
            track-by="id"
            :options="{{ $professores->toJson() }}"
            :multiple="false"
            placeholder="{{ trans('admin.forms.select_professor') }}"
            label="full_name">
        </multiselect>
        <div v-if="errors.has('professor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('professor') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('activated'), 'has-success': fields.activated && fields.activated.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="activated" type="checkbox" v-model="form.activated" v-validate="''" data-vv-name="activated"  name="activated_fake_element">
        <label class="form-check-label" for="activated">
            {{ trans('admin.disciplina.columns.activated') }}
        </label>
        <input type="hidden" name="activated" :value="form.activated">
        <div v-if="errors.has('activated')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('activated') }}</div>
    </div>
</div>


