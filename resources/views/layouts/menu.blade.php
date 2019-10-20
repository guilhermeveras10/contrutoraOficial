<li class="treeview">
    <a href="#" class="dropdown-toggle drop-menu-item-main" data-toggle="dropdown"><i
            class="glyphicon glyphicon-calendar"></i> Cadastros <i class="fa fa-angle-left pull-right"></i> </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('servicos*') ? 'active' : '' }}">
            <a href="{!! route('servicos.index') !!}"><i class="fa fa-server"></i><span>Serviços</span></a>
        </li>
        <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="{!! route('clientes.index') !!}"><i class="fa  fa-group"></i><span>Clientes</span></a>
        </li>
        <li class="{{ Request::is('empresas*') ? 'active' : '' }}">
            <a href="{!! route('empresas.index') !!}"><i class="fa fa-compass"></i><span>Empresas</span></a>
        </li>
        <li class="{{ Request::is('funcionarios*') ? 'active' : '' }}">
            <a href="{!! route('funcionarios.index') !!}"><i class="fa fa-heart"></i><span>Funcionarios</span></a>
        </li>
        <li class="{{ Request::is('cargosses*') ? 'active' : '' }}">
            <a href="{!! route('cargosses.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
        </li>        
        <li class="{{ Request::is('engenheiros*') ? 'active' : '' }}">
            <a href="{!! route('engenheiros.index') !!}"><i class="fa fa-edit"></i><span>Engenheiros</span></a>
        </li>
        <li class="{{ Request::is('unidades*') ? 'active' : '' }}">
            <a href="{!! route('unidades.index') !!}"><i class="fa fa-edit"></i><span>Unidades</span></a>
        </li>        
        <li class="{{ Request::is('bancos*') ? 'active' : '' }}">
            <a href="{!! route('bancos.index') !!}"><i class="fa fa-edit"></i><span>Bancos</span></a>
        </li>
        <li class="{{ Request::is('contas*') ? 'active' : '' }}">
            <a href="{!! route('contas.index') !!}"><i class="fa fa-edit"></i><span>Contas</span></a>
        </li>
        <li class="{{ Request::is('carteiras*') ? 'active' : '' }}">
            <a href="{!! route('carteiras.index') !!}"><i class="fa fa-edit"></i><span>Carteiras</span></a>
        </li>        
        <li class="{{ Request::is('tipos*') ? 'active' : '' }}">
            <a href="{!! route('tipos.index') !!}"><i class="fa fa-edit"></i><span>Tipos</span></a>
        </li>
        <li class="{{ Request::is('fornecedores*') ? 'active' : '' }}">
            <a href="{!! route('fornecedores.index') !!}"><i class="fa fa-edit"></i><span>Fornecedores</span></a>
        </li>        
    </ul>
</li>
<li class="treeview" style="height: auto;">
    <a href="#" class="dropdown-toggle drop-menu-item-main" data-toggle="dropdown"><i
            class="glyphicon glyphicon-calendar"></i> Produção <i class="fa fa-angle-left pull-right"></i> </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servicos*') ? 'active' : '' }}">
            <a href="{!! route('servicos.index') !!}"><i class="fa fa-server"></i><span>Orçamentos</span></a>
        </li>
        <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="{!! route('clientes.index') !!}"><i class="fa  fa-group"></i><span>Ordens de serviço</span></a>
        </li>        
    </ul>
</li>
<li class="treeview" style="height: auto;">
    <a href="#" class="dropdown-toggle drop-menu-item-main" data-toggle="dropdown"><i
            class="glyphicon glyphicon-calendar"></i> Faturamento <i class="fa fa-angle-left pull-right"></i> </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servicos*') ? 'active' : '' }}">
            <a href="{!! route('servicos.index') !!}"><i class="fa fa-server"></i><span>Serviços</span></a>
        </li>
        <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="{!! route('clientes.index') !!}"><i class="fa  fa-group"></i><span>Clientes</span></a>
        </li>
        <li class="{{ Request::is('empresas*') ? 'active' : '' }}">
            <a href="{!! route('empresas.index') !!}"><i class="fa fa-compass"></i><span>Empresas</span></a>
        </li>
        <li class="{{ Request::is('funcionarios*') ? 'active' : '' }}">
            <a href="{!! route('funcionarios.index') !!}"><i class="fa fa-heart"></i><span>Funcionarios</span></a>
        </li>
        <li class="{{ Request::is('cargosses*') ? 'active' : '' }}">
            <a href="{!! route('cargosses.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
        </li>        
        <li class="{{ Request::is('engenheiros*') ? 'active' : '' }}">
            <a href="{!! route('engenheiros.index') !!}"><i class="fa fa-edit"></i><span>Engenheiros</span></a>
        </li>
        <li class="{{ Request::is('unidades*') ? 'active' : '' }}">
            <a href="{!! route('unidades.index') !!}"><i class="fa fa-edit"></i><span>Unidades</span></a>
        </li>        
        <li class="{{ Request::is('bancos*') ? 'active' : '' }}">
            <a href="{!! route('bancos.index') !!}"><i class="fa fa-edit"></i><span>Bancos</span></a>
        </li>
        <li class="{{ Request::is('contas*') ? 'active' : '' }}">
            <a href="{!! route('contas.index') !!}"><i class="fa fa-edit"></i><span>Contas</span></a>
        </li>
        <li class="{{ Request::is('carteiras*') ? 'active' : '' }}">
            <a href="{!! route('carteiras.index') !!}"><i class="fa fa-edit"></i><span>Carteiras</span></a>
        </li>        
    </ul>
</li>
<li class="treeview" style="height: auto;">
    <a href="#" class="dropdown-toggle drop-menu-item-main" data-toggle="dropdown"><i
            class="glyphicon glyphicon-calendar"></i> Financeira <i class="fa fa-angle-left pull-right"></i> </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servicos*') ? 'active' : '' }}">
            <a href="{!! route('servicos.index') !!}"><i class="fa fa-server"></i><span>Serviços</span></a>
        </li>
        <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="{!! route('clientes.index') !!}"><i class="fa  fa-group"></i><span>Clientes</span></a>
        </li>
        <li class="{{ Request::is('empresas*') ? 'active' : '' }}">
            <a href="{!! route('empresas.index') !!}"><i class="fa fa-compass"></i><span>Empresas</span></a>
        </li>
        <li class="{{ Request::is('funcionarios*') ? 'active' : '' }}">
            <a href="{!! route('funcionarios.index') !!}"><i class="fa fa-heart"></i><span>Funcionarios</span></a>
        </li>
        <li class="{{ Request::is('cargosses*') ? 'active' : '' }}">
            <a href="{!! route('cargosses.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
        </li>        
        <li class="{{ Request::is('engenheiros*') ? 'active' : '' }}">
            <a href="{!! route('engenheiros.index') !!}"><i class="fa fa-edit"></i><span>Engenheiros</span></a>
        </li>
        <li class="{{ Request::is('unidades*') ? 'active' : '' }}">
            <a href="{!! route('unidades.index') !!}"><i class="fa fa-edit"></i><span>Unidades</span></a>
        </li>        
        <li class="{{ Request::is('bancos*') ? 'active' : '' }}">
            <a href="{!! route('bancos.index') !!}"><i class="fa fa-edit"></i><span>Bancos</span></a>
        </li>
        <li class="{{ Request::is('contas*') ? 'active' : '' }}">
            <a href="{!! route('contas.index') !!}"><i class="fa fa-edit"></i><span>Contas</span></a>
        </li>
        <li class="{{ Request::is('carteiras*') ? 'active' : '' }}">
            <a href="{!! route('carteiras.index') !!}"><i class="fa fa-edit"></i><span>Carteiras</span></a>
        </li>        
    </ul>
</li>
<li class="treeview" style="height: auto;">
    <a href="#" class="dropdown-toggle drop-menu-item-main" data-toggle="dropdown"><i
            class="glyphicon glyphicon-calendar"></i> Relatórios <i class="fa fa-angle-left pull-right"></i> </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servicos*') ? 'active' : '' }}">
            <a href="{!! route('servicos.index') !!}"><i class="fa fa-server"></i><span>Listagem de funcionários</span></a>
        </li>
        <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="{!! route('clientes.index') !!}"><i class="fa  fa-group"></i><span>Ordens de serviços</span></a>
        </li>
    </ul>
</li>
<li class="treeview" style="height: auto;">
    <a href="#" class="dropdown-toggle drop-menu-item-main" data-toggle="dropdown"><i
            class="glyphicon glyphicon-calendar"></i> Sistema <i class="fa fa-angle-left pull-right"></i> </a>
    <ul class="treeview-menu" style="display: none;">
        <li class="{{ Request::is('servicos*') ? 'active' : '' }}">
            <a href="{!! route('servicos.index') !!}"><i class="fa fa-server"></i><span>Usuários</span></a>
        </li>
        <li class="{{ Request::is('funcoes*') ? 'active' : '' }}">
            <a href="{!! route('funcoes.index') !!}"><i class="fa fa-edit"></i><span>Funcoes</span></a>
        </li>        
        <li class="{{ Request::is('niveis*') ? 'active' : '' }}">
            <a href="{!! route('niveis.index') !!}"><i class="fa fa-edit"></i><span>Niveis</span></a>
        </li>        
        <li class="{{ Request::is('funcionarios*') ? 'active' : '' }}">
            <a href="{!! route('funcionarios.index') !!}"><i class="fa fa-heart"></i><span>Rotinas</span></a>
        </li>
    </ul>
</li>
