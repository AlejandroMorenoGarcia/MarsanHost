<main class="auth">
    <div class="container">
        <div class="auth-card">

            <aside class="auth-aside on-dark">
                <h1>Bienvenido de nuevo</h1>
                <p>Consulta tus reservas y tus alojamientos favoritos de la Costa Blanca desde un solo sitio.</p>
            </aside>

            <section class="auth-body" aria-labelledby="login-titulo">
                <h2 id="login-titulo">Entrar en tu cuenta</h2>
                <p class="muted">Usa el correo con el que te registraste.</p>

                <!-- Mensaje de error (muéstralo desde PHP cuando falle el acceso):
                <div class="alert alert--error" role="alert">El correo o la contraseña no son correctos.</div>
                -->

                <form class="form" action="login.php" method="post">
                    <div class="field">
                        <label for="email">Correo electrónico</label>
                        <input class="input" type="email" id="email" name="email" autocomplete="username" required>
                    </div>

                    <div class="field">
                        <div class="field-row">
                            <label for="password">Contraseña</label>
                            <a class="link" href="recuperar.php">¿La has olvidado?</a>
                        </div>
                        <input class="input" type="password" id="password" name="password" autocomplete="current-password" required>
                    </div>

                    <label class="check">
                        <input type="checkbox" name="recordar" value="1">
                        Mantener la sesión iniciada
                    </label>

                    <button class="btn btn--primary btn--block" type="submit">Entrar</button>
                </form>

                <p class="muted" style="margin-top:var(--space-5)">
                    ¿Aún no tienes cuenta? <a class="link" href="register.php">Crear cuenta</a>
                </p>
            </section>

        </div>
    </div>
</main>