@extends('layouts.forms')
@section('form')

<div class="full-wd">
    <h3 class="create-accident-title">Νέα Εγγραφή [ΟΔΟΣ]</h3>

    <form wire:submit.prevent='save' class="data-input-form">
     @csrf
     {{-- @if($step == 0) --}}
         @error('general')
             <div class="block error"> <h3> {{ $message }} </h3> </div>
         @enderror
         <div class="form-category"> <!-- FORM CATEGORY START-->
             <div class="form-group s100-100">
                 <label for="accident_id">id</label>
                 <select name="accident_id" wire:model="accident_id">
                     <option value="0">Επιλέξτε...</option>

                     @foreach ($id as $ids )
                         <option value="{{$ids->id}}">{{$ids->id}} | {{ $ids->accidentCase }}</option>
                     @endforeach
                 </select>
                 @error('accident_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>


             <div class="form-group s100-100">
                 <label for="streetTrafficwayFlow_id">Κυκλοφοριακή Ροή:</label>
                 <select name="streetTrafficwayFlow_id" wire:model='streetTrafficwayFlow_id'>
                     @foreach ($streetTrafficwayFlow as $rtf )
                         <option value="{{ $rtf->id }}">{{$rtf->description}}</option>
                     @endforeach
                 </select>
                 @error('streetTrafficwayFlow_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetLaneNumber">Αριθμός Λορίδων:</label>
                 <input type="number" wire:model='streetLaneNumber' name="streetLaneNumber" id="streetLaneNumber">
                 @error('streetLaneNumber')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s2-3">
                 <label for="streetType_id">streetType_id</label>
                 <select name="streetType_id" wire:model='streetType_id'>
                     @foreach ($streetType as $rtp)
                         <option value="{{$rtp->id}}">{{$rtp->description}}</option>
                     @endforeach
                 </select>
                 @error('streetType_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetSpeedLimit">streetSpeedLimit</label>
                 <input type="number" name="streetSpeedLimit" wire:model='streetSpeedLimit' id="streetSpeedLimit">
                 @error('streetSpeedLimit')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s2-3">
                 <label for="streetSpeedLimitType_id">streetSpeedLimitType_id</label>
                 <select name="streetSpeedLimitType_id" wire:model='streetSpeedLimitType_id'>
                     @foreach ($streetSpeedLimitType as $streetSpeedLimitT )
                         <option value="{{$streetSpeedLimitT->id}}">{{$streetSpeedLimitT->description}}</option>
                     @endforeach
                 </select>
                 @error('streetSpeedLimitType_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetJunction_id">streetJunction_id</label>
                 <select name="streetJunction_id" wire:model='streetJunction_id' >
                     @foreach ($streetJunction as $streetJunc )
                         <option value="{{$streetJunc->id}}">{{$streetJunc->description}}</option>
                     @endforeach
                 </select>
                 @error('streetJunction_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetLocalArea_id">streetLocalArea_id</label>
                 <select name="streetLocalArea_id" wire:model="streetLocalArea_id">
                     @foreach ($streetLocalArea as $streetLocal )
                         <option value="{{$streetLocal->id}}">{{$streetLocal->description}}</option>
                     @endforeach
                 </select>
                 @error('streetLocalArea_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-3">
                 <label for="streetAlignment_id">streetAlignment_id</label>
                 <select name="streetAlignment_id" wire:model="streetAlignment_id">
                     @foreach ($streetAlignment as $streetAlig )
                         <option value="{{$streetAlig->id}}">{{$streetAlig->description}}</option>
                     @endforeach
                 </select>
                 @error('streetAlignment_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetConstructionZone_id">streetConstructionZone_id</label>
                 <select name="streetConstructionZone_id" wire:model="streetConstructionZone_id">
                     @foreach ($streetConstructionZone as $streetConstruction )
                         <option value="{{$streetConstruction->id}}">{{$streetConstruction->description}}</option>
                     @endforeach
                 </select>
                 @error('streetConstructionZone_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetTrafficSigns_id">streetTrafficSigns_id</label>
                 <select name="streetTrafficSigns_id" wire:model="streetTrafficSigns_id">
                     @foreach ($streetTrafficSigns as $streetTraffic )
                         <option value="{{$streetTraffic->id}}">{{$streetTraffic->description}}</option>
                     @endforeach
                 </select>
                 @error('streetTrafficSigns_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetTrafficSignalDeviceFunctioning_id">streetTrafficSignalDeviceFunctioning_id</label>
                 <select name="streetTrafficSignalDeviceFunctioning_id" wire:model="streetTrafficSignalDeviceFunctioning_id">
                     @foreach ($streetTrafficSignalDeviceFunctioning as $streetTrafficSignalDevice )
                         <option value="{{$streetTrafficSignalDevice->id}}">{{$streetTrafficSignalDevice->description}}</option>
                     @endforeach
                 </select>
                 @error('streetTrafficSignalDeviceFunctioning_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-3">
                 <label for="streetSurface_id">streetSurface_id</label>
                 <select name="streetSurface_id" wire:model="streetSurface_id">
                     @foreach ($streetSurface as $streetSur )
                         <option value="{{$streetSur->id}}">{{$streetSur->description}}</option>
                     @endforeach
                 </select>
                 @error('streetSurface_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetPedestrianFacility_id">streetPedestrianFacility_id</label>
                 <select name="streetPedestrianFacility_id" wire:model="streetPedestrianFacility_id">
                     @foreach ($streetPedestrianFacility as $streetPedestrian)
                         <option value="{{$streetPedestrian->id}}">{{$streetPedestrian->description}}</option>
                     @endforeach
                 </select>
                 @error('streetPedestrianFacility_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-3">
                 <label for="streetCycleFacility_id">streetCycleFacility_id</label>
                 <select name="streetCycleFacility_id" wire:model="streetCycleFacility_id">
                     @foreach ($streetCycleFacility as $streetCycleFac )
                         <option value="{{$streetCycleFac->id}}">{{$streetCycleFac->description}}</option>
                     @endforeach
                 </select>
                 @error('streetCycleFacility_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
         </div>{{--Form category END--}}

         <div class="form-category"> <!-- FORM CATEGORY START-->
             <div class="form-group s1-2">
                 <label for="streetLightConditions_id">streetLightConditions_id</label>
                 <select name="streetLightConditions_id" wire:model="streetLightConditions_id">
                     @foreach ($streetLightConditions as $streetLight )
                         <option value="{{$streetLight->id}}">{{$streetLight->description}}</option>
                     @endforeach
                 </select>
                 @error('streetLightConditions_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-2">
                 <label for="streetWeatherConditions_id">streetWeatherConditions_i</label>
                 <select name="streetWeatherConditions_id" wire:model="streetWeatherConditions_id">
                     @foreach ($streetWeatherConditions as $streetWeather )
                         <option value="{{$streetWeather->id}}">{{$streetWeather->description}}</option>
                     @endforeach
                 </select>
                 @error('streetWeatherConditions_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-2">
                 <label for="streetStrongWinds_id">streetStrongWinds_id</label>
                 <select name="streetStrongWinds_id" wire:model="streetStrongWinds_id">
                     @foreach ($streetStrongWinds as $streetStrong )
                         <option value="{{$streetStrong->id}}">{{$streetStrong->description}}</option>
                     @endforeach
                 </select>
                 @error('streetStrongWinds_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-2">
                 <label for="streetFog_id">streetFog_id</label>
                 <select name="streetFog_id" wire:model="streetFog_id">
                     @foreach ($streetFog as $streetF )
                         <option value="{{$streetF->id}}">{{$streetF->description}}</option>
                     @endforeach
                 </select>
                 @error('streetFog_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s100-100 height-large">
                 <label for="streetConditionComments">streetConditionComments</label>
                 <textarea name="streetConditionComments" wire:model="streetConditionComments" id="streetConditionComments"></textarea>
                 @error('streetConditionComments')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
         </div>{{--Form category END--}}



         <div class="form-category"> <!-- FORM CATEGORY START-->

             <div class="form-group s1-2">
                 <label for="streetPollutants_id">streetPollutants_id</label>
                 <select name="streetPollutants_id" wire:model="streetPollutants_id">
                     @foreach ($streetPollutants as $streetPol )
                         <option value="{{$streetPol->id}}">{{$streetPol->description}}</option>
                     @endforeach
                 </select>
                 @error('streetPollutants_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-2">
                 <label for="streetTransientFactors_id">streetTransientFactors_id</label>
                 <select name="streetTransientFactors_id" wire:model="streetTransientConstraints_id">
                     @foreach ($streetTransientFactors as $streetTransient )
                         <option value="{{$streetTransient->id}}">{{$streetTransient->description}}</option>
                     @endforeach
                 </select>
                 @error('streetTransientFactors_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-2">
                 <label for="streetSignalingFactors_id">streetSignalingFactors_id</label>
                 <select name="streetSignalingFactors_id" wire:model="streetSignalingFactors_id">
                     @foreach ($streetSignalingFactors as $streetSignaling )
                         <option value="{{$streetSignaling->id}}">{{$streetSignaling->description}}</option>
                     @endforeach
                 </select>
                 @error('streetSignalingFactors_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s1-2">
                 <label for="streetSpeedLimitingFacility_id">streetSpeedLimitingFacility_id</label>
                 <select name="streetSpeedLimitingFacility_id" wire:model="streetSpeedLimitingFacility_id">
                     @foreach ($streetSpeedLimitingFacility as $streetSpeedLimitingF )
                         <option value="{{$streetSpeedLimitingF->id}}">{{$streetSpeedLimitingF->description}}</option>
                     @endforeach
                 </select>
                 @error('streetSpeedLimitingFacility_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-2">
                 <label for="streetSLIContributedCollision_id">streetSLIContributedCollision_id</label>
                 <select name="streetSLIContributedCollision_id" wire:model="streetSLIContributedToCollision_id">
                     @foreach ($streetSLIContributedCollision as $streetSLIContributed )
                         <option value="{{$streetSLIContributed->id}}">{{$streetSLIContributed->description}}</option>
                     @endforeach
                 </select>
                 @error('streetSLIContributedCollision_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>


             <div class="form-group s100-100 height-large">
                 <label for="streetPossibleFactorsComments">streetPossibleFactorsComments</label>
                 <textarea name="streetPossibleFactorsComments" wire:model="streetPossibleFactorsComments" id="streetPossibleFactorsComments"></textarea>
                 @error('streetPossibleFactorsComments')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
         </div> <!-- FORM CATEGORY END -->

         <div class="form-group s100-100 height-large">
             <label for="streetOtherComments">Άλλα Σχόλια</label>
             <textarea name="streetOtherComments" wire:model="streetOtherComments" id="streetOtherComments"></textarea>
             @error('streetOtherComments')
             <small class="error">{{$message}}</small>
             @enderror
         </div>

         <div class="form-category"> <!-- FORM SECTION -->

             <div class="form-group s2-3">
                 <label for="streetInformationSource_id">streetInformationSource_id</label>
                 <select name="streetInformationSource_id" wire:model="streetInformationSource_id">
                     @foreach ($streetInformationSource as $streetInformation )
                         <option value="{{$streetInformation->id}}">{{$streetInformation->description}}</option>
                     @endforeach
                 </select>
                 @error('streetInformationSource_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-3">
                 <label for="streetISTrustLevel_id">streetISTrustLevel_id</label>
                 <select name="streetISTrustLevel_id" wire:model="streetISTrustLevel_id">
                     @foreach ($streetISTrustLevel as $streetISTrust )
                         <option value="{{$streetISTrust->id}}">{{$streetISTrust->description}}</option>
                     @endforeach
                 </select>
                 @error('streetISTrustLevel_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
             <div class="form-group s100-100 height-large">
                 <label for="streetISTLDescription">streetISTLDescription</label>
                 <textarea name="streetISTLDescription" wire:model="streetISTLDescription" id="streetISTLDescription"></textarea>
                 @error('streetISTLDescription')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s2-3">
                 <label for="streetInvestigationMethod_id">streetInvestigationMethod_id</label>
                 <select name="streetInvestigationMethod_id" wire:model="streetInvestigationMethod_id">
                     @foreach ($streetInvestigationMethod as $streetInvestigation )
                         <option value="{{$streetInvestigation->id}}">{{$streetInvestigation->description}}</option>
                     @endforeach
                 </select>
                 @error('streetInvestigationMethod_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s1-3">
                 <label for="streetIMTrustLevel_id">streetIMTrustLevel_id</label>
                 <select name="streetIMTrustLevel_id" wire:model="streetIMTrustLevel_id" disabled>
                     @foreach ($streetIMTrustLevel as $streetIMTrust )
                         <option value="{{$streetIMTrust->id}}">{{$streetIMTrust->description}}</option>
                     @endforeach
                 </select>
                 @error('streetIMTrustLevel_id')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>

             <div class="form-group s100-100 height-large">
                 <label for="streetIMTLDescription">streetIMTLDescription</label>
                 <textarea name="streetIMTLDescription" id="streetIMTLDescription" wire:model="streetIMTLDescription"></textarea>
                 @error('streetIMTLDescription')
                 <small class="error">{{$message}}</small>
                 @enderror
             </div>
         <div class="form-group s100-100">
             <div class="preview-container">
                 @if($images)
                 {{-- <img class="img-preview" src="{{$images->temporaryUrl()}}"> --}}
                @foreach ($images as $img)
                <img class="img-preview" src="{{$img->temporaryUrl()}}">
                @endforeach
                 @endif
                 {{-- <div class="img-preview" style='background-image: url("\C:\Users\user\Desktop\coc_bot_bg.png"); '> </div> --}}

             </div>
             <label for="accidentImage">Φόρτωση Εικόνων</label>
             <input type="file" name="streetImages" wire:model="images" multiple="multiple" value="Αναζήτηση εικόνων">
             @error('images.*')
             <small class="error">{{$message}}</small>
             @enderror

         </div>
         </div>
         </div>
         <div class="form-category"> <!-- FORM SECTION -->

             <input type="submit" wire:loading.attr='disabled' class="form-input form-submit" value="ΟΛΟΚΛΗΡΩΣΗ ΕΓΓΡΑΦΗΣ">

         </div>
     </form>
     </div>

@endsection
