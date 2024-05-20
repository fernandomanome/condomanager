<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondominiosTable extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('condominios', function (Blueprint $table) {
			$table->id();
			$table->string('razao_social');
			$table->string('nome_fantasia');
			$table->string('cnpj')->unique();
			$table->unsignedBigInteger('id_contratante');
			$table->unsignedBigInteger('id_sindico');
			$table->enum('status_contrato',['ATIVO','INATIVO','DEGUSTACAO','IMPLANTACAO'])->default('INATIVO');
			$table->enum('situacao_cnpj',['ATIVO','INATIVO','PENDENTE_VALIDACAO'])->default('PENDENTE_VALIDACAO');
			$table->boolean('ativo')->default(true);
			$table->unsignedBigInteger('id_permissoes_condominio');
			$table->string('telefone_condominio');
			$table->string('email_condominio');
			$table->string('cep', 9);
			$table->string('tipo_logradouro');
			$table->string('logradouro');
			$table->string('numero');
			$table->string('complemento')->nullable();
			$table->string('bairro');
			$table->string('cidade');
			$table->string('uf');
			$table->string('ponto_referencia')->nullable();
			$table->string('codigo_ibge');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('condominios');
	}
}
