import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginAdministracionComponent } from './Components/login-administracion/login-administracion.component';
import { RegionDashboardComponent } from './Components/region-dashboard/region-dashboard.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginAdministracionComponent,
    RegionDashboardComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
