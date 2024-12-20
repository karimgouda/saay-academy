@if (config('filament.layout.footer.should_show_logo'))
    <div class="flex items-center justify-center filament-footer">
        <a href="https://klay-team.online/" target="_blank">
            <h1>
                {{ __('Developed by') }} <strong style="color: rgb(174, 69, 147);">KLAY TEAM</strong>
            </h1>
        </a>
    </div>
@endif
