import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListadoComponent } from './listado/listado.component';
import { VideojuegoDetallesComponent } from './videojuego-detalles/videojuego-detalles.component';
import { CarritoComponent } from './carrito/carrito.component';
import { PedidoComponent } from './pedido/pedido.component';

@NgModule({
  declarations: [
    AppComponent,
    ListadoComponent,
    VideojuegoDetallesComponent,
    CarritoComponent,
    PedidoComponent
  ],
  imports: [
    HttpClientModule,
    FormsModule, //necesario para usar [(ngModel)]
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
