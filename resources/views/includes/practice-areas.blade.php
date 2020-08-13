<div class="large-4 cell sidebar">
    <div class="section pages">
        <h3>Practice Areas</h3>
        <ul>
            <li class="page_item page-item-308"><a href="{{ route('litigation') }}">Litigation</a></li>
            <li class="page_item page-item-305"><a href="{{ route('corporate-commercial') }}">Corporate & Commercial</a></li>
            <li class="page_item page-item-307"><a href="{{ route('property-conveyancing') }}">Property & Conveyancing</a></li>
            <li class="page_item page-item-306"><a href="{{ route('consumer-business') }}" aria-current="page">Consumer & Business Retail</a></li>
            <li class="page_item page-item-303"><a href="{{ route('wills-probate') }}">Wills & Probate</a></li>
            <li class="page_item page-item-304"><a href="{{ route('divorce') }}">Divorce</a></li>
        </ul>
        <div class="select show-for-small-only">
            <label for="practiceslist" class="hide">Pracitces List Mobile</label>
            <select id="practiceslist" onchange="location = this.value;">
                <option selected="selected" disabled="disabled">Select Practice</option>
                <option value="{{ route('litigation') }}">Litigation</option>
                <option value="{{ route('corporate-commercial') }}">Corporate & Commercial</option>
                <option value="{{ route('property-conveyancing') }}">Property & Conveyancing</option>
                <option value="{{ route('consumer-business') }}">Consumer & Business Retail</option>
                <option value="{{ route('wills-probate') }}">Wills & Probate</option>
                <option value="{{ route('divorce') }}">Divorce</option>      
            </select>
        </div>
    </div>
</div>