import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CarritoComponent } from './carrito/carrito.component';
import { ListadoComponent } from './listado/listado.component';
import { PedidoComponent } from './pedido/pedido.component';
import { VideojuegoDetallesComponent } from './videojuego-detalles/videojuego-detalles.component';

const routes: Routes = [
  { path: "carrito", component: CarritoComponent },
  { path: "listado", component: ListadoComponent },
  { path: "detalles/:id", component: VideojuegoDetallesComponent },
  { path: "pedido", component: PedidoComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
