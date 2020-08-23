import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LoginAdministracionComponent } from './login-administracion.component';

describe('LoginAdministracionComponent', () => {
  let component: LoginAdministracionComponent;
  let fixture: ComponentFixture<LoginAdministracionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LoginAdministracionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LoginAdministracionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
