<div class="sidebar-widget" id="book">
    <div class="sidebar-widget-item">
        <div class="contact-form-action">
            <form method="post" action="{{ route('booking.store') }}">
                @csrf
                <div class="form-group">
                    <label class="label-text">Enter Email</label>
                    <input type="text" name="post_id" value="{{$cars->id}}" hidden>
                    <input class="form-control" type="email" name="email" placeholder="Email address">
                    <small>After Booking we use this email to Book your Ride</small>
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-box">
                    <label class="label-text">Pick-up From</label>
                    <div class="form-group">
                        <span class="la la-map-marker form-icon"></span>
                        <input class="form-control" type="text" name="pick_up_from" placeholder="Destination, city, or airport">
                        @error('pick_up_from')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-box">
                    <label class="label-text">Drop-off to</label>
                    <div class="form-group">
                        <span class="la la-map-marker form-icon"></span>
                        <input class="form-control" type="text" name="drop_off_to" placeholder="Destination, city, or airport">
                        @error('drop_off_to')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-box">
                    <label class="label-text">Pick Up Time</label>
                    <div class="form-group">
                        <div class="select-contain w-auto">
                            <div class="dropdown bootstrap-select select-contain-select"><select class="select-contain-select" name="pick_up_time" tabindex="-98">
                                    <option value="1200AM">12:00AM</option>
                                    <option value="1230AM">12:30AM</option>
                                    <option value="0100AM">1:00AM</option>
                                    <option value="0130AM">1:30AM</option>
                                    <option value="0200AM">2:00AM</option>
                                    <option value="0230AM">2:30AM</option>
                                    <option value="0300AM">3:00AM</option>
                                    <option value="0330AM">3:30AM</option>
                                    <option value="0400AM">4:00AM</option>
                                    <option value="0430AM">4:30AM</option>
                                    <option value="0500AM">5:00AM</option>
                                    <option value="0530AM">5:30AM</option>
                                    <option value="0600AM">6:00AM</option>
                                    <option value="0630AM">6:30AM</option>
                                    <option value="0700AM">7:00AM</option>
                                    <option value="0730AM">7:30AM</option>
                                    <option value="0800AM">8:00AM</option>
                                    <option value="0830AM">8:30AM</option>
                                    <option value="0900AM" selected="">9:00AM</option>
                                    <option value="0930AM">9:30AM</option>
                                    <option value="1000AM">10:00AM</option>
                                    <option value="1030AM">10:30AM</option>
                                    <option value="1100AM">11:00AM</option>
                                    <option value="1130AM">11:30AM</option>
                                    <option value="1200PM">12:00PM</option>
                                    <option value="1230PM">12:30PM</option>
                                    <option value="0100PM">1:00PM</option>
                                    <option value="0130PM">1:30PM</option>
                                    <option value="0200PM">2:00PM</option>
                                    <option value="0230PM">2:30PM</option>
                                    <option value="0300PM">3:00PM</option>
                                    <option value="0330PM">3:30PM</option>
                                    <option value="0400PM">4:00PM</option>
                                    <option value="0430PM">4:30PM</option>
                                    <option value="0500PM">5:00PM</option>
                                    <option value="0530PM">5:30PM</option>
                                    <option value="0600PM">6:00PM</option>
                                    <option value="0630PM">6:30PM</option>
                                    <option value="0700PM">7:00PM</option>
                                    <option value="0730PM">7:30PM</option>
                                    <option value="0800PM">8:00PM</option>
                                    <option value="0830PM">8:30PM</option>
                                    <option value="0900PM">9:00PM</option>
                                    <option value="0930PM">9:30PM</option>
                                    <option value="1000PM">10:00PM</option>
                                    <option value="1030PM">10:30PM</option>
                                    <option value="1100PM">11:00PM</option>
                                    <option value="1130PM">11:30PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-box">
                    <label class="label-text">Drop-off Time</label>
                    <div class="form-group">
                        <div class="select-contain w-auto">
                            <div class="dropdown bootstrap-select select-contain-select"><select class="select-contain-select" name="drop_off_time" tabindex="-98">
                                    <option value="1200AM">12:00AM</option>
                                    <option value="1230AM">12:30AM</option>
                                    <option value="0100AM">1:00AM</option>
                                    <option value="0130AM">1:30AM</option>
                                    <option value="0200AM">2:00AM</option>
                                    <option value="0230AM">2:30AM</option>
                                    <option value="0300AM">3:00AM</option>
                                    <option value="0330AM">3:30AM</option>
                                    <option value="0400AM">4:00AM</option>
                                    <option value="0430AM">4:30AM</option>
                                    <option value="0500AM">5:00AM</option>
                                    <option value="0530AM">5:30AM</option>
                                    <option value="0600AM">6:00AM</option>
                                    <option value="0630AM">6:30AM</option>
                                    <option value="0700AM">7:00AM</option>
                                    <option value="0730AM">7:30AM</option>
                                    <option value="0800AM">8:00AM</option>
                                    <option value="0830AM">8:30AM</option>
                                    <option value="0900AM" selected="">9:00AM</option>
                                    <option value="0930AM">9:30AM</option>
                                    <option value="1000AM">10:00AM</option>
                                    <option value="1030AM">10:30AM</option>
                                    <option value="1100AM">11:00AM</option>
                                    <option value="1130AM">11:30AM</option>
                                    <option value="1200PM">12:00PM</option>
                                    <option value="1230PM">12:30PM</option>
                                    <option value="0100PM">1:00PM</option>
                                    <option value="0130PM">1:30PM</option>
                                    <option value="0200PM">2:00PM</option>
                                    <option value="0230PM">2:30PM</option>
                                    <option value="0300PM">3:00PM</option>
                                    <option value="0330PM">3:30PM</option>
                                    <option value="0400PM">4:00PM</option>
                                    <option value="0430PM">4:30PM</option>
                                    <option value="0500PM">5:00PM</option>
                                    <option value="0530PM">5:30PM</option>
                                    <option value="0600PM">6:00PM</option>
                                    <option value="0630PM">6:30PM</option>
                                    <option value="0700PM">7:00PM</option>
                                    <option value="0730PM">7:30PM</option>
                                    <option value="0800PM">8:00PM</option>
                                    <option value="0830PM">8:30PM</option>
                                    <option value="0900PM">9:00PM</option>
                                    <option value="0930PM">9:30PM</option>
                                    <option value="1000PM">10:00PM</option>
                                    <option value="1030PM">10:30PM</option>
                                    <option value="1100PM">11:00PM</option>
                                    <option value="1130PM">11:30PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="theme-btn btn-sm w-100 ">Book Now</button>
            </form>
        </div>
    </div><!-- end sidebar-widget-item -->
</div>