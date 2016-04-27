<?php
                        
function menu($role){


        $menu="                <!-- Menu superior-->
                        <ul class=\"nav\">
                            <li class=\"\">
                                <a href=\"/dashboard\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"/pos\">POS</a>
                            </li>

                            <li class=\"dropdown\">
                                <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Content <i class=\"caret\"></i>

                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">News</a>
                                    </li>
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">Calendar</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">FAQ</a>
                                    </li>
                                </ul>
                            </li>

                            <li class=\"dropdown\">
                                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Reportes <b class=\"caret\"></b>

                                </a>
                                <ul class=\"dropdown-menu\" id=\"menu1\">
                                    <li>
                                        <a href=\"#\">Tools <i class=\"icon-arrow-right\"></i>

                                        </a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li>
                                                <a href=\"/reportes/cortedecaja\">Corte de Caja</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Reporte Mensual</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Logs</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"/reportes?sub=cortedecaja\">Corte de Caja</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Reporte Mensual</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">Other Link</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Other Link</a>
                                    </li>
                                </ul>
                            </li>








                            <li class=\"dropdown\">
                                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Administracion <b class=\"caret\"></b>

                                </a>
                                <ul class=\"dropdown-menu\" id=\"menu1\">
                                    <li>
                                        <a href=\"#\">Tools <i class=\"icon-arrow-right\"></i>

                                        </a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li>
                                                <a href=\"#\">Reports</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Logs</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Catalogos</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Empleados</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">Proveedores</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Servicios</a>
                                    </li>
                                </ul>
                            </li>

                            







                             <li class=\"dropdown\">
                                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Configuracion <b class=\"caret\"></b>

                                </a>
                                <ul class=\"dropdown-menu\" id=\"menu1\">
                                    <li>
                                        <a href=\"#\">Tools <i class=\"icon-arrow-right\"></i>

                                        </a>
                                        <ul class=\"dropdown-menu sub-menu\">
                                            <li>
                                                <a href=\"#\">Usuarios</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Logs</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Usuarios</a>
                                    </li>
                                    <li>
                                        <a href=\"/configuracion?sub=menu\">Menu</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                    <li>
                                        <a href=\"#\">Categorias</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Subcategorias</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Tallas</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">Plugins</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Privilegios</a>
                                    </li>
                                </ul>
                            </li>



                            <li class=\"dropdown\">
                                <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Ayuda <i class=\"caret\"></i>

                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a tabindex=\"-1\" href=\"/ayuda?sub=cookies\">cookies</a>
                                    </li>
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex=\"-1\" href=\"#\">Permissions</a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>";

                        return $menu;

};

?>