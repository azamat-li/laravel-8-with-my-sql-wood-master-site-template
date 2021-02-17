context('client', () => {
  beforeEach(() => {
    cy.visit('http://stolyaroff.test/clients/')
  })

  describe('contains app global name', () => {
    it('contains app global name', () => {
			cy.contains('Столярофф');
		})
	})

  describe('description has text-gray-600 class', () => {
    it('app name is bold', () => {
			cy.get('[data-cy=desc]')
				.should('have.class', 'text-gray-600');
		})
	})
})
