<?php

echo '<div class="ui blue inverted form segment">
        <h4 class="ui horizontal header divider">
            <i class="loading circular black add user icon"></i>
            Formulario de ingreso
        </h4>
        <form class="ui blue inverted form segment">
            <p>Lets go ahead and get you signed up.</p>
            <div class="two fields">
                <div class="field">
                    <label>Nombre</label>
                    <input placeholder="Nombre" name="first-name" type="text">
                </div>
                <div class="field">
                    <label>Apellidos</label>
                    <input placeholder="Apellidos" name="last-name" type="text">
                </div>
            </div>
            <div class="two fields">
                <div class="inline field">
                    <label>Edad</label>
                    <div class="inline field">
                        <input type="text" name="first-name" placeholder="Edad">
                    </div>
                </div>
                <div class="field">
                    <label>Genero</label>
                    <div class="ui fluid selection dropdown">
                        <input type="hidden" name="gender">
                        <div class="default text">Genero</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="male">Masculino</div>
                            <div class="item" data-value="female">Femenino</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inline fields">
                <div class="field">
                    <label>Telefono/Celular</label>
                    <input type="text" placeholder="(xxx)">
                </div>
                <div class="field">
                    <input type="text" placeholder="xxxx">
                </div>
                <div class="field">
                    <input type="text" placeholder="xxxx">
                </div>
            </div>
            <div class="field">
                <label>Biografía</label>
                <textarea></textarea>
             </div>
            <div class="ui inverted black submit button">Submit</div>
        </form>
    </div>'
;
