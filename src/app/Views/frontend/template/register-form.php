<main class="auth">
    <div class="container">
        <div class="auth-card">

            <aside class="auth-aside on-dark">
                <h1>Crea tu cuenta</h1>
                <p>Reserva en la Costa Blanca o publica tu vivienda con Marsan Host.</p>
                <ul class="auth-list">
                    <li>Guarda tus alojamientos favoritos</li>
                    <li>Gestiona tus reservas en un solo sitio</li>
                    <li>Check-in autónomo y soporte las 24 horas</li>
                </ul>
            </aside>

            <section class="auth-body" aria-labelledby="registro-titulo">
                <h2 id="registro-titulo">Registrarme</h2>
                <p class="muted">Solo te llevará un minuto.</p>

                <!-- Mensaje de error (muéstralo desde PHP si falla el registro):
                <div class="alert alert--error" role="alert">Ese correo ya está registrado.</div>
                -->

                <form class="form" action="register.php" method="post">
                    <div class="field">
                        <label for="nombre">Nombre completo</label>
                        <input class="input" id="nombre" name="nombre" autocomplete="name" required>
                    </div>

                    <div class="field">
                        <label for="email">Correo electrónico</label>
                        <input class="input" type="email" id="email" name="email" autocomplete="email" required>
                    </div>

                    <div class="field-pair">
                        <div class="field">
                            <label for="password">Contraseña</label>
                            <input class="input" type="password" id="password" name="password" autocomplete="new-password" minlength="8" required>
                        </div>
                        <div class="field">
                            <label for="password2">Repetir contraseña</label>
                            <input class="input" type="password" id="password2" name="password2" autocomplete="new-password" minlength="8" required>
                        </div>
                    </div>
                    <p class="field-hint">Mínimo 8 caracteres.</p>

                    <label class="check check--top">
                        <input type="checkbox" name="terminos" value="1" required>
                        <span>He leído y acepto el <a class="link" href="aviso-legal.php">aviso legal</a> y la <a class="link" href="privacidad.php">política de privacidad</a>.</span>
                    </label>

                    <button class="btn btn--primary btn--block" type="submit">Crear cuenta</button>
                </form>

                <p class="muted" style="margin-top:var(--space-5)">
                    ¿Ya tienes cuenta? <a class="link" href="login.php">Entrar</a>
                </p>
            </section>

        </div>
    </div>
</main>