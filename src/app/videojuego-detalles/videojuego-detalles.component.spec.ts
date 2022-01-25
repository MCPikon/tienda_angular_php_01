import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VideojuegoDetallesComponent } from './videojuego-detalles.component';

describe('VideojuegoDetallesComponent', () => {
  let component: VideojuegoDetallesComponent;
  let fixture: ComponentFixture<VideojuegoDetallesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ VideojuegoDetallesComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(VideojuegoDetallesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
