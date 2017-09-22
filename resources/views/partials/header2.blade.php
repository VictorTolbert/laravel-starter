
<div class="level" style="margin-bottom: 0.25rem">
    <div class="level-left">

        <div class="level-item">
            <div class="tags has-addons">
                <span class="tag is-success">&nbsp;</span>
                <span class="tag">Recurring Program</span>
            </div>
        </div>
        <div class="level-item">
            <div class="tags has-addons">
                <span class="tag is-warning">&nbsp;</span>
                <span class="tag">Program Deviation</span>
            </div>
        </div>
        <div class="level-item">
            <div class="tags has-addons">
                <span class="tag is-danger">&nbsp;</span>
                <span class="tag">Non-Sellable Program</span>
            </div>
        </div>
        <div class="level-item">
            <div class="tags has-addons">
                <span class="tag is-info">&nbsp;</span>
                <span class="tag">Both Programs Availed</span>
            </div>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <div class="field has-addons">
                <p class="control">
                  <a class="button">
                    <b-icon icon="view_list"></b-icon>
                    {{-- <span>Table View</span> --}}
                  </a>
                </p>
                <p class="control">
                  <a class="button">
                    <b-icon icon="show_chart"></b-icon>
                    {{-- <span>Chart View</span> --}}
                  </a>
                </p>
            </div>
        </div>
        <div class="level-item">
            <div class="field has-addons">
              <p class="control">
                <a class="button">
                    <b-icon icon="filter_list"></b-icon>
                    {{-- <span>Filter</span> --}}
                </a>
              </p>
              <p class="control">
                <a class="button ">
                  <b-icon icon="sort"></b-icon>
                  {{-- <span>Sort</span> --}}
                </a>
              </p>
            </div>
        </div>
        <div class="level-item">
            <p class="control">
                <a class="button">
                    <b-icon icon="file_download"></b-icon>
                    {{-- <span>Export</span> --}}
                </a>
            </p>
        </div>
        <div class="level-item">
            <p class="control">
                {{-- <a class="button is-small" @click="isCustomizeDataModalActive = true"> --}}
                <a class="button" data-show="quickview" data-target="quickviewDefault">
                    <b-icon icon="sliders" pack="fa"></b-icon>
                    {{-- <span>Customize Columns</span> --}}
                </a>
            </p>
        </div>
    </div>
</div>
